<style>

#buyingIntro {
  background-color: #beb18e;
  color: white;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.5rem;
  font-weight: 100;
  padding: 2rem 10rem;
  line-height: 2.3rem;
  margin-top: 3rem;
}

#buyingImage img {
  width: 100%;
  height: 33rem;
  object-fit: cover;
  margin-top: 3rem;
}

.buyingHeading {
  margin: 3rem 15rem;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 2.3rem;
}

.buyingText {
  margin: 3rem 15rem;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.3rem;
  line-height: 1.6rem;
}

#buyingContact {
  background-color: #303030;
  display: block;
  padding: 1.5rem;
  margin-bottom: 6rem;
  margin-top: 4rem;
  text-align: center;
}

a#contactLink:link {
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 2.5rem;
  color: #beb18e;
  display: inline-block;
  text-decoration: none;
}

a#contactLink:visited {
  color: #beb18e !important;
}

a#contactLink:before {
  content: "";
  position: relative;
  top: 3.75rem;
  display: block;
  width: 100%;
  height: 3px;
  bottom: -3rem;
  left: 0;
  background-color: #beb18e;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

#buyingContact a:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

@media screen and (min-width: 1340px) {

  #buyingIntro,
  #buyingImage {
    max-width: 1340px;
    margin: auto;
  }

  #buyingIntro {
    margin-top: 3rem;
  }

  .buyingHeading,
  .buyingText {
    max-width: 50vw;
    margin: auto;
  }

}

@media screen and (max-width: 1115px) {

  #buyingIntro {
    padding: 2rem 5rem;
  }

  .buyingText,
  .buyingHeading {
    margin: 3rem 11rem;
  }

}

@media screen and (max-width: 915px) {

  #buyingIntro {
    font-size: 1.25rem;
  }

  .buyingText,
  .buyingHeading {
    margin: 3rem 7rem;
  }

  .buyingHeading {
    font-size: 2rem;
  }

  .buyingText {
    font-size: 1.2rem;
  }

}

@media screen and (max-width: 700px) {

  #buyingIntro {
    line-height: 2rem;
  }

  #buyingImage img {
    height: 26rem;
  }

  .buyingText,
  .buyingHeading {
    margin: 3rem 4rem;
  }

  .buyingHeading {
    line-height: 2.3rem;
  }

}

@media screen and (max-width: 500px) {

  #buyingIntro {
    padding: 2rem;
  }

  #buyingImage img {
    height: 19rem;
  }

  .buyingText,
  .buyingHeading {
    margin: 3rem 2rem;
  }

  .buyingHeading {
    font-size: 1.5rem;
    font-weight: 600;
  }

}

@media screen and (max-width: 400px) {

  #buyingIntro {
    line-height: 1.75rem;
    font-size: 1.2rem;
  }

  #buyingImage img {
    height: 13rem;
  }

  .buyingHeading {
    line-height: 2rem;
  }

}

</style>
