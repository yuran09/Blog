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
