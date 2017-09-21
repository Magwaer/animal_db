<?php 
session_start();
?>
<html ng-app="animalApp">
<head>
    <link rel="stylesheet" href="node_modules/angular-material/angular-material.min.css"/>
    <link rel="stylesheet" href="static/css/default.css"/>
</head>
<body ng-controller="mainController">
    <md-menu-bar>
        <md-menu>
            <button ng-click="$mdMenu.open()">
                Actions
            </button>
            <md-menu-content>
                <md-menu-item>
                    <md-button ng-href="#!/view_all/{{k}}">
                        Dashboard
                    </md-button>
                </md-menu-item>
                <md-menu-divider></md-menu-divider>
                <md-menu-item>
                    <md-menu>
                        <md-button ng-click="$mdMenu.open()">New animal</md-button>
                        <md-menu-content>
                            <md-menu-item ng-repeat="type in animals_types"><md-button ng-click="ctrl.sampleAction('New Document', $event)">{{type.label}}</md-button></md-menu-item>
                        </md-menu-content>
                    </md-menu>
                </md-menu-item>
            </md-menu-content>
        </md-menu>
        <md-menu>
            <button ng-click="$mdMenu.open()">
                View all
            </button>
            <md-menu-content>
                <md-menu-item ng-repeat="type in animals_types"><md-button ng-href="#!/animals/{{type.id}}">{{type.label}}</md-button></md-menu-item>
            </md-menu-content>
        </md-menu>
    </md-menu-bar>
    
    <div id="main_view">
        <ng-view></ng-view>
    </div>

    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-material/angular-material.min.js"></script>
    <script src="node_modules/angular-animate/angular-animate.min.js"></script>
    <script src="node_modules/angular-aria/angular-aria.min.js"></script>
    <script src="node_modules/angular-messages/angular-messages.min.js"></script>
    <script src="node_modules/angular-material/angular-material.min.js"></script>
    <script src="node_modules/angular-route/angular-route.min.js"></script>
    
    <script src="static/js/config.js"></script>
    <script src="static/js/app.js"></script>
</body>
</html>