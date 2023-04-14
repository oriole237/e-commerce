pipeline {
  agent any
  stages {
    stage ("build"){
      steps {
        sh 'composer install'
        
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
