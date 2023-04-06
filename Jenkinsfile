pipeline {
  agent any
  stages {
    stage ('Build'){
      steps {
        git 'https://github.com/oriole237/e-commerce.git'
        sh 'composer install'
        sh 'cp .env.example .env'
        sh 'php artisan key:generate'
        echo 'build success'
      }
    }
    stage ('Test'){
        steps{
            sh './vendor/bin/phpunit'
            echo 'test success'
        }
    }
  }
  
}
