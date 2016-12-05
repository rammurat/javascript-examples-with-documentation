/*jslint node:true es5:true nomen:true*/
/*global $, jQuery, console, alert, manifest, WebSocket*/

"use strict";

var fs = require('fs'),
    path = require('path'),
    http = require('http'),
    bodyParser = require('body-parser'),    
    express = require('express'),
    querystring = require('querystring'),
    config = require('./config'),
    app = express(),
    httpServer = http.createServer(app),
    logdata = [],
    logfile,
    tweets = {},
    url = require('url');
    


function init() {

    app.use(express.static(config.webdir));
    app.use(express.static(config.nodedir));
    
    app.use(bodyParser.json({
        limit: '10mb'
    }));

    app.use(bodyParser.urlencoded({
        extended: true,
        limit: '10mb'
    }));

    app.get("/getconfig", function (req, res) {
        var response = {};
        response.visionServerIP = config.serverIP;
        res.send(JSON.stringify(response));
    });

    httpServer.listen(config.port);
    console.log("HTTP Server listening at " + config.port);
    
}

init();