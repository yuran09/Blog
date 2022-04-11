pipeline{

    agent any

    stages{
        stage("build"){
            steps{
                echo 'building application'
                sh 'php --version'
                sh 'composer install'
                sh 'composer --version'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
                sh 'php artisan serve --port=8082'
            }
        }

        stage("test"){
            steps{
                echo 'testing application'
            }
        }

        stage("deploy"){
            steps{
                echo 'deploying application...'
            }
        }
    }
}
