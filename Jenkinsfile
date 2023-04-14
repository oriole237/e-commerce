pipeline {
  agent any
  stages {
    stage ("build"){
      steps {
        sh 'composer install'
        sh 'find . -name "*.php" -print0 | xargs -0 -n1 php -l'
      }
    }
    stage ("test"){
      steps{
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
