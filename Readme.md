## Project Template 
![Docker Badge](https://img.shields.io/badge/Docker-2496ED?style=flat&logo=docker&logoColor=white)
![Symfony Badge](https://img.shields.io/badge/Symfony-7.1-333?style=flat&logo=symfony&logoColor=white)
![Next.js Badge](https://img.shields.io/badge/Next.js-14-000000?style=flat&logo=next.js&logoColor=white)
![MySQL Badge](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql&logoColor=white)
![PHP Badge](https://img.shields.io/badge/PHP-8.3-777BB4?style=flat&logo=php&logoColor=white)
![Node.js Badge](https://img.shields.io/badge/Node.js-22-339933?style=flat&logo=node.js&logoColor=white)

## Docker Set up

1. Install Docker on your local machine:

| OS      | Tutorial URL                                    |
| ------- | ----------------------------------------------- |
| LinuxOS | https://docs.docker.com/engine/install/ubuntu/  |
| MacOS   | https://www.docker.com/products/docker-desktop/ |

2.  Change environment variables in the `.env` file in each folder


3. Launch the following command to pull image and install container in each folder

```
docker compose up --build -d
```

### Project Set Up backend

1. To enter into the php container, type in your terminal

2. Make install

    ```
    composer install
    ```
3. The project is now ready to be used in the browser at `http://SERVER_NAME`

### Project Set Up frontend

1. To enter into the node container, type in your terminal

2. Make install

    ```
    pnpm install
    ```
3. Run the project
    ```
    pnpm dev
    ```

4. The project is now ready to be used in the browser at `http://localhost:3000`

## Unit & Functional tests
![PHPUnit Badge](https://img.shields.io/badge/PHPUnit-11.1-990066?style=flat&logo=php&logoColor=white)


### PHP Unit
To make test with PHP Unit, please check online documentation here: https://docs.phpunit.de/en/11.1/

Once, you made your first unit test, check this one on your local before commit your changes.
```
   bin/phpunit 
```

You can complete with the path of your choice and run only the test you want to test by adding an argument to the command line
```
--filter="nameOfYourTest"
```

You can complete with the path of your choice

## Coding Standard
![Static Badge](https://img.shields.io/badge/phpStan-1.11-blue.svg?logo=githubactions&logoColor=fff&style=flat)
![Static Badge](https://img.shields.io/badge/phpMD-2.15-blue.svg?logo=githubactions&logoColor=fff&style=flat)
![Static Badge](https://img.shields.io/badge/phpCS-3.10-blue.svg?logo=githubactions&logoColor=fff&style=flat)
### Backend code analyser

All of code analyser, need to be launched through a terminal.
Go to your container php bash 

And then launch one of analyser :

| Code Analyser | Linux CMD                      |
|---------------|--------------------------------|
| PHP CS        | ```bin/phpcs ```               |
| PHP MD        | ```bin/phpmd text phpmd.xml``` |
| PHP STAN      | ```bin/phpstan  ```            |

### Frontend code analyser

All of code analyser, need to be launched through a terminal.
Go to your container node bash

And then launch one of analyser :
```
pnpm run lint
```

### Git Workflow
![Git Badge](https://img.shields.io/badge/Git-F05032?style=flat&logo=git&logoColor=white)

The project is using the Gitflow workflow.
The code analyzers for both backend and frontend have been run, alongside backend tests with a minimum of 75% coverage.
