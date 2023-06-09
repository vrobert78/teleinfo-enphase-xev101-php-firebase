<?php

const TIMEZONE = 'Europe/Paris';

const DEVICE_ARDUINO = '/dev/ttyACM0';
const DEVICE_CONFIG_ARDUINO = array(
    'baud' => 1200,
    'bits' => 7,
    'stop'  => 1,
    'parity' => 2
);

const DEVICE_CONSO = '/dev/ttyUSB0';
const DEVICE_CONFIG_CONSO = array(
    'baud' => 1200,
    'bits' => 7,
    'stop'  => 1,
    'parity' => 2
);

const DEVICE_PRODUCTION = '/dev/ttyUSB1';
const DEVICE_CONFIG_PRODUCTION = array(
    'baud' => 9600,
    'bits' => 7,
    'stop'  => 1,
    'parity' => 2
);

const FIREBASE_URI = 'https://xxxxx.firebaseio.com/';
const ENPHASE_URI = 'http://xxx.xxx.xxx.xxx/production.json';

const ENPHASEPAUSE = 1;
const DATETIMEFORMAT = 'Y-m-d H:i:s';

const FIREBASETIMEOUT = 5.0;
const FIREBASEJSON = __DIR__ . '/firebase-service-account.json';

const DEBUG = false;
const DEBUGAUTOPILOT = true;

const MEMCACHED_SERVER = "localhost";
const MEMCACHED_PORT = 11211;

const STATSD_SERVER = '192.168.0.4';
const STATSD_PORT = 8125;

const VOLTAGE = 240;

const MIN_POWER_XEV = 7;

const MAX_LOOPS_BEFORE_DECISION = 5;
const MAX_LOOPS_BEFORE_DECISION_DECREASE = 60;

const MAX_MAIN_LOOP = 3600;

const MAX_ISOUSC = 45;

const MIN_INJECTION = 1;
