# How do configure xdebug in VsCode with Docker and WSL 2

- Create file `.vscode/launch.json` in root directory project with below content (Replace '/var/www/project_folder' with path of your project in Docker container):
```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Docker Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "log": true,
            "pathMappings": {
                "/var/www/project_folder":"${workspaceFolder}"
            },
            "ignore": [
                "**/vendor/**/*.php"
            ]
        }
    ]
}
```
- Create file `90-php-xdebug.ini` with below content:
```ini
xdebug.mode=develop,coverage,debug,gcstats,profile,trace
xdebug.discover_client_host=0
xdebug.client_host='host.docker.internal'
```
- Add below commands in Dockerfile (Example use image php:7.3-apache):

```dockerfile
COPY ./90-php-xdebug.ini "${PHP_INI_DIR}/conf.d"
pecl install xdebug
docker-php-ext-enable xdebug
```
- Add below instruction in docker-compose.yml file:
```yml
extra_hosts:
      - "host.docker.internal:host-gateway"
```

- In Vscode install `PHP Debug` extension or similar;
