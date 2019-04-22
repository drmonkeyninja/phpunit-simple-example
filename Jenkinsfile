#!/usr/bin/env groovy

node('master') {

    try{
        // stage('Get code from SCM') {
        //     checkout(
        //             [$class: 'GitSCM', branches: [[name: '*/#your-dev-branch#']],
        //              doGenerateSubmoduleConfigurations: false,
        //              extensions: [],
        //              submoduleCfg: [],
        //              userRemoteConfigs: [[url: '#your-git-link#']]]
        //     )
        // }
        
        stage('Checkout code') {
            checkout scm
        }

        stage('Composer Install') {
            sh 'composer install'
        }

        // stage("PHPLint") {
        //     sh 'find app -name "*.php" -print0 | xargs -0 -n1 php -l'
        // }

        stage("PHPUnit") {
            sh 'vendor/phpunit/phpunit/phpunit --log-junit \'reports/unit-test-report.xml\''
        }

        // stage("Publish Coverage") {
        //     publishHTML (target: [
        //             allowMissing: false,
        //             alwaysLinkToLastBuild: false,
        //             keepAll: true,
        //             reportDir: 'build/coverage',
        //             reportFiles: 'index.html',
        //             reportName: "Coverage Report"

        //     ])
        // }

        // stage("Publish Clover") {
        //     step([$class: 'CloverPublisher', cloverReportDir: 'build/logs', cloverReportFileName: 'clover.xml'])
        // }

        // stage('Checkstyle Report') {
        //     sh 'vendor/bin/phpcs --report=checkstyle --report-file=build/logs/checkstyle.xml --standard=phpcs.xml --extensions=php,inc --ignore=autoload.php --ignore=vendor/ app || exit 0'
        //     checkstyle pattern: 'build/logs/checkstyle.xml'
        // }

        // stage('Mess Detection Report') {
        //     sh 'vendor/bin/phpmd app xml phpmd.xml --reportfile build/logs/pmd.xml --exclude vendor/ --exclude autoload.php || exit 0'
        //     pmd canRunOnFailed: true, pattern: 'build/logs/pmd.xml'
        // }

        // stage('CPD Report') {
        //     sh 'phpcpd --log-pmd build/logs/pmd-cpd.xml --exclude vendor app || exit 0' /* should be vendor/bin/phpcpd but... conflicts... */
        //     dry canRunOnFailed: true, pattern: 'build/logs/pmd-cpd.xml'
        // }

        // stage('Lines of Code') {
        //     sh 'vendor/bin/phploc --count-tests --exclude vendor/ --log-csv build/logs/phploc.csv --log-xml build/logs/phploc.xml app'
        // }

        // stage('Software metrics') {
        //     sh 'vendor/bin/pdepend --jdepend-xml=build/logs/jdepend.xml --jdepend-chart=build/pdepend/dependencies.svg --overview-pyramid=build/pdepend/overview-pyramid.svg --ignore=vendor app'
        // }

        // stage('Generate documentation') {
        //     sh 'vendor/bin/phpdox -f phpdox.xml'
        // }
        // stage('Publish Documentation') {
        //     publishHTML (target: [
        //             allowMissing: false,
        //             alwaysLinkToLastBuild: false,
        //             keepAll: true,
        //             reportDir: 'build/phpdox/html',
        //             reportFiles: 'index.html',
        //             reportName: "PHPDox Documentation"

        //     ])
        // }
    } catch(error) {
        throw error;
    } finally {
        stage("Publish Unit Test Results") {
            junit 'reports/*.xml'
        }
    }

}
