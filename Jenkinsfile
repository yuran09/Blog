pipeline{

    agent any

    stages{
        stage("build"){
            steps{
                echo 'building application'
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
