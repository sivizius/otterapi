otterapi
========

***otterapi*** is a simple way to get a random pictures of otters.
I do not own any of these pictures.
If you think an image should be removed for whatever reason, open an issue, I hopefully will process it.

How To Use It
-------------

1.  Download the `otters.json`-file:

```bash
wget -o $InfoFile https://raw.githubusercontent.com/sivizius/otterapi/master/otters.json
```

2.  Parse this json-file. It contains three array of URLs to otter pictures:

```json
{
  "gifs": [ … ],
  "jpgs": [ … ],
  "pngs": [ … ]
}
```

3.  get the length of one of the arrays or concat some arrays together and get the length of it,
4.  get a random number between `0` and `length - 1`,
5.  download `array [ $number ]`,
6.  now you have a cute pic.
