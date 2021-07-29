### MaxMind GeoLite2 City/ Country IP address location testing

This simple PHP script locates an IP address location using MaxMind GeoLite2 data.

**IMPORTANT NOTE**: 

This script is purely for testing purposes meant for software developers and should not be used in any illegal inappropriate way. Please respect the privacy of others! 

---

#### USAGE:

**Note**: Please note that this script has been tested within a Linux environment, usage details might differ on Windows and Mac.

**Step 1**

Clone the repository locally

```
git clone https://github.com/roland198412/geoip_location_detection.git
```

**Step 2**

Navigate to the project root

```
cd <project_parent_dir/geoip_location_detection
```

**Step 3**

Boot up a local PHP webserver see: [Built-in PHP web server](https://www.php.net/manual/en/features.commandline.webserver.php)

```
php -S localhost:8000
```

**Step 4**

Open your browser and browse/ access the following address. 

**NOTE**: Please replace the query parameter ip value `<IP>` with the IP 
you want to determine the location for.

```
http://localhost:8000/?ip=<IP>
```

This will then give you available location details for the specified IP address.

**NOTE**: By default the IP detection uses the MaxMind GeoLite2 Country database. To make
use of the city database simple append the type as an additional query parameter to the URL.

e.g.

```
http://localhost:8000/?ip=<IP>&type=city
```

By adding `&type=city` to the url we will be searching the MaxMind GeoLite2 City database instead of 
the country database.

---

This product includes GeoLite2 data created by MaxMind, available from [https://www.maxmind.com](https://www.maxmind.com).

Without MaxMind this simple IP to Location detection would not be possible. Please support them.

