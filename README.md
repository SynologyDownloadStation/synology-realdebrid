# synology-realdebrid

This is a basic, but functional, [RealDebrid](http://real-debrid.com) file hosting module for Synology Download Station.

The existing RealDebrid module isn't working for me, so I created a new one based on the [official developer guide](http://usdl.synology.com/download/ds/userguide/Developer_Guide_to_File_Hosting_Module.pdf).

## What's missing

* Sensible error handling (if that's even possible with the provided API)
* The `INFO` file does not contain all the hosts RealDebrid can handle: update to suit your needs

## Testing

To test from command line:
```
php test.php
```

## Troubleshooting

If the download fails, try using the website. Usually this means that specific file host is down, or there's something wrong with your login.

## Installing

```
tar zcf realdebrid2.host INFO realdebrid2.php
```
And add `realdebrid2.host` as a file hosting module in the Download Station settings.