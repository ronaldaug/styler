# Styler - A lightweight and responsive theme for Bludit CMS.

## [DEMO](https://styler.augusthost.com)

## Features
- Bootstrap 5
- Full-screen image slider (GlideJS)
- Fade In Animations (SAL)
- SASS
- Feather Icons
- Laravel Mix
- Fully responsive

## Installation
- [Download here](https://github.com/ronaldaug/styler/archive/master.zip)
- Rename `styler-master` to `styler`
- Place in `bl-themes` folder


## How to enable full-screen image Slider
- Create a new category called "slider"
- Create posts that link to "slider" category
- Slider image is post's cover image.
- Recommend slider image size is 1200 x 400 in pixels


## How to change main theme colors
- Open `sass/_variables.scss` and edit two virables `$theme-color` and `$theme-hover-color`
- Compile SASS to `css/style.css`

-------------
## Development - Laravel Mix

```sh
npm install
```

#### watch
```
npm run watch
```


#### develop
```
npm run dev
```


#### production
```
npm run prod
```

-----

## Change logs

Version 1.3.1
- Remove duplicated bootstrap css in header

--- 

Version 1.3
- Remove jquery and jquery based libraries.
- Add laravel mix, SAL animation on scroll, GlideJS slider and Feather Icons.

--- 

 ## Screenshot
 
 <a target="_blank" href="http://apicenter.epizy.com">
    <img src="https://user-images.githubusercontent.com/33022876/84876329-19637280-b0ad-11ea-9b0e-02922082e54e.jpg">
 </a>
