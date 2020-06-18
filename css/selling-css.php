<style>

#sellingIntro {
  background-color: #303030;
  color: #fff;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.5rem;
  font-weight: 100;
  padding: 2rem 10rem;
  line-height: 2.3rem;
  margin-top: 3rem;
}

#sellingImage img {
  width: 100%;
  height: 33rem;
  object-fit: cover;
  margin-top: 3rem;
}

.sellingHeading {
  margin: 3rem 15rem;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 2.3rem;
}

.sellingText {
  margin: 3rem 15rem;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.3rem;
  line-height: 1.6rem;
}

#sellingContact {
  background-color: #beb18e;
  display: block;
  padding: 1.5rem;
  margin-bottom: 6rem;
  margin-top: 4rem;
  text-align: center;
}

a#sellingLink:link {
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 2.5rem;
  color: #303030;
  display: inline-block;
  text-decoration: none;
}

a#sellingLink:visited {
  color: #303030 !important;
}

a#sellingLink:before {
  content: "";
  position: relative;
  top: 3.75rem;
  display: block;
  width: 100%;
  height: 4px;
  bottom: -3rem;
  left: 0;
  background-color: #303030;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

#sellingContact a:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

@media screen and (min-width: 1340px) {

  #sellingIntro,
  #sellingImage {
    max-width: 1340px;
    margin: auto;
  }

  #sellingIntro {
    margin-top: 3rem;
  }

  .sellingHeading,
  .sellingText {
    max-width: 50vw;
    margin: auto;
  }

}

@media screen and (max-width: 1115px) {

  #sellingIntro {
    padding: 2rem 5rem;
  }

  .sellingText,
  .sellingHeading {
    margin: 3rem 11rem;
  }

}

@media screen and (max-width: 915px) {

  #sellingIntro {
    font-size: 1.25rem;
  }

  .sellingText,
  .sellingHeading {
    margin: 3rem 7rem;
  }

  .sellingHeading {
    font-size: 2rem;
  }

  .sellingText {
    font-size: 1.2rem;
  }

}

@media screen and (max-width: 700px) {

  #sellingIntro {
    line-height: 2rem;
  }

  #sellingImage img {
    height: 26rem;
  }

  .sellingText,
  .sellingHeading {
    margin: 3rem 4rem;
  }

  .sellingHeading {
    line-height: 2.3rem;
  }

}

@media screen and (max-width: 500px) {

  #sellingIntro {
    padding: 2rem;
  }

  #sellingImage img {
    height: 19rem;
  }

  .sellingText,
  .sellingHeading {
    margin: 3rem 2rem;
  }

  .sellingHeading {
    font-size: 1.5rem;
    font-weight: 600;
  }

}

@media screen and (max-width: 400px) {

  #sellingIntro {
    line-height: 1.75rem;
    font-size: 1.2rem;
  }

  #sellingImage img {
    height: 13rem;
  }

  .sellingHeading {
    line-height: 2rem;
  }

}

</style>
