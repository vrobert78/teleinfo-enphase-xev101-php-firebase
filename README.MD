# TELEINFO PHP DAEMON

This PHP script is a way to get [teleinfo](https://www.enedis.fr/sites/default/files/Enedis-NOI-CPT_54E.pdf) rawdata from an [Enedis](https://www.enedis.fr/) electricity meter like a [Linky](https://www.enedis.fr/linky-compteur-communicant).

![Teleinfo](./images/teleinfo.jpg)

To decode the frame, you'll need an USB module like the [USBTICLCV2](https://www.cartelectronic.fr/teleinfo-compteur-enedis/127-teleinfo-1-compteur-usb-lc.html) from Cartelectronic.

The script is intended to run as a Linux Daemon, you'll find a [systemd file](/teleinfo.service) in the source that you can reuse for this purpose.

This daemon reads continuously data from the electricity meter and sends them to a [Google Firebase Realtime Database](https://firebase.google.com/products/realtime-database).

![Firebase](./images/firebase.png)

Don't forget to add your `firebase-service-account.json` to authenticate to Firebase.\
Rename the `config.sample.php` into `config.php`. Set the constants to reflect your configuration.

The Android App [teleinfo-android-firebase](https://github.com/vrobert78/teleinfo-android-firebase) is able to use the data stored in Firebase and to represent in near-realtime your electricity consumption.

`enphase.php` gets data from Enphase Solar Panel system.

`autopilot-XEV101.php` uses all the data collected from the linky and enphase. Based on that, it forges a TIC frame to pilot our Hager XEV101 wallbox. The main goal is to inject a proportional quantity of energy of what's produced. This is auto-adjusted in real-time.

All the scripts use firebase as main database. This is also very useful to be able to change some behaviours using the Android App. For instance, we can charge the car using only solar panels, or if we're in a hurry, we can force the "full power" mode.