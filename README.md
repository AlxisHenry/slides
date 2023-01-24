<a name="readme-top"></a>

<div align="center">

  <img src="https://cdn.alexishenry.eu/shared/images/logo.png" alt="logo" width="220" height="auto" />
  <h1>Slides</h1>
  
  <p>
    <strong>Slides diapositive</strong><br>
		Insipired by <a href="https://github.com/Grafikart">@Grafikart</a>
  </p>

<a href="https://alxishenry.github.io/docs"><strong>Documentation »</strong></a>

<h4>
    <a href="https://slides.alexishenry.eu">Go to the site</a>
  <span> · </span>
    <a href="https://github.com/AlxisHenry/slides/issues">Report a bug</a>
  <span> · </span>
    <a href="https://github.com/AlxisHenry/slides/issues">I have an idea</a>
  </h4>
</div>

<br/>

# :notebook_with_decorative_cover: Summary

- [:notebook_with_decorative_cover: About the project](#star2-about-the-project)
  - [:space_invader: Techs](#space_invader-techs)
- [:toolbox: Getting Started](#toolbox-getting-started)
  - [:gear: Setup](#gear-setup)
- [:wave: Authors](#wave-authors)

## :star2: About the project

Slides diapositives like powerpoint for presentation in navigator. Made with RevealJs.

### :space_invader: Techs

[![PHP](https://img.shields.io/badge/php%20-hotpink.svg?&style=for-the-badge&logo=PHP&color=gray)]()
[![Javascript](https://img.shields.io/badge/javascript%20-hotpink.svg?&style=for-the-badge&logo=javascript&color=gray)]()
[![CSS](https://img.shields.io/badge/css%20-hotpink.svg?&style=for-the-badge&logo=CSS3&logoColor=blue&color=gray)]()

## :toolbox: Getting Started

### :gear: Setup

**Clone the repository**

```bash
$ git clone https://github.com/AlxisHenry/slides.git
```

**Install dependencies**

```bash
$ pnpm install
```

**Launch _browser-sync_ server to active hot reload**

```bash
$ pnpm start
```

**In the openned page, go to `public\slides\{name}`**

_If you want to use the web interface, you need to create a Symlink of `slides` directory inside the public folder._

```bash
cd path/to/root;
ln -s path/to/root/slides public/slides
```

Note that you need to have this line in your **Virtualhost** :

```bash
<Directory "/path/to/slides/public">
  Options FollowSymLinks
  ...
</Directory>
```

## :wave: Contributors

- **Alexis Henry** _alias_ [@AlxisHenry](https://github.com/AlxisHenry)

<p align="right">(<a href="#readme-top">back to top</a>)</p>
