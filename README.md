### Splade

#### What does this contain
A simple Laravel application to test out TailwindCSS multi-theme setup.
 - `resources/views/css/app.css`
```
...
@layer base {
    :root {
        --color-text-base: #e16a35;
        --color-fill: #111827;
        --color-accent: #ed8936;
    }
    .red {
        --color-text-base: #040303;
        --color-fill: #c87474;
    }
    .blue {
        --color-text-base: #e6e6e6;
        --color-fill: #0391f3;
    }
...
```
- `tailwind.config.js`
```
...
theme: {
  extend: {
    textColor: {
      skin: {
        base: "var(--color-text-base)",
      },
    },
    backgroundColor: {
      skin: {
        fill: "var(--color-fill)",
      }
    }
  },
},
...
```

#### How to run locally

Run following command:   

```
docker-compose up -d
```
*This will take a little while (a few minutes, on a slow system/internet-connection) since the first time Docker will need to download the required images to create the containers*

Following should be the working URL:
```
http://23.114.1.1
```

Javascript method `setTheme` for theme-switching is located in `resources/view/root.blade.php`

#### Screen recording of the working theme-switcher:   

[screen-recording-2023-06-19.webm](https://github.com/jdecode/splade/assets/37613346/2934ad74-ad67-4777-8bc8-af173e3ebfd9)

