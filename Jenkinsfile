pipeline {
  agent any
  stages {
    stage ("build"){
      steps {
        bat 'composer install'
        bat 'copy .env.example .env'
    	bat 'php artisan key:generate'
    	bat "perl -i -e 's/DB_DATABASE=laravel/DB_DATABASE=commerce/g' .env"
        
      }
    }
    stage ("test"){
      steps{
        bat 'vendor/bin/phpunit tests/Feature'
        bat 'php artisan migrate'
        bat 'copy .env .env.dusk.local'
        bat "perl -i -e 's;APP_URL=http://localhost;APP_URL=local.commerce.com;g' .env.dusk.local"
        bat "perl -i -e 's/SESSION_DRIVER=file/SESSION_DRIVER=database/g' .env.dusk.local"
        bat 'sudo chmod -R 775 storage/'
        bat 'sudo chown -R :www-data storage/'
        bat 'php artisan dusk'
        echo 'test stage here'
      }
    }
    stage ("deploy"){
      steps{
          echo 'test stage here'
      }
    }
  }
  
}
