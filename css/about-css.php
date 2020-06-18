<style>

#aboutHero img {
  width: 100%;
  height: 29rem;
  object-fit: cover;
  margin-top: 3rem;
}

#aboutIntro {
  background-color: #beb18e;
  color: white;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 100;
  font-size: 1.5rem;
  line-height: 2.5rem;
  padding: 1.5rem 11rem;
  margin-top: 3rem;
}

.aboutEachParagraph {
  float: left;
  max-width: 29rem;
  margin: 3rem 3rem 3rem 5rem;;
  font-size: 1.2rem;
  line-height: 1.6rem;
  font-family: 'Roboto Condensed', sans-serif;
}

.aboutEachImage {
    float: right;
}

.aboutEachImage img {
float: right;    
  width: 38rem;
  height: 22rem;
  object-fit: cover;
  margin-top: 2rem;
  margin-bottom: 2rem;
  margin-right: 5rem;
}

.aboutBlackBar {
  clear: both;
  background-color: #303030;
  padding: 2rem 12rem;
  color: #beb18e;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.5rem;
  font-weight: 100;
  margin-top: 3rem;
}

.whiteText {
  color: white;
}

.aboutBlackBar p {
    margin: .6rem;
}

#aboutSecondHero img {
  width: 100%;
  margin: 3rem 0;
  object-fit: cover;
}

@media screen and (min-width: 1340px) {

  #aboutHero,
  #aboutIntro,
  .aboutBlackBar,
  #aboutSecondHero,
  #aboutContainer {
    max-width: 1340px;
    margin: auto;
  }

  #aboutHero img {
    margin-bottom: 3rem;
  }

}

@media screen and (max-width: 1300px) {

  .aboutEachImage img {
    width: 44vw;
    float: right;
  }

}

@media screen and (max-width: 1230px) {

  .aboutEachImage img {
    margin-right: 2rem;
  }

}

@media screen and (max-width: 1160px) {

  .aboutEachParagraph {
    max-width: 40vw;
    margin: 3rem 2rem 3rem 3rem;
  }

  #aboutIntro {
    padding: 1.5rem 5rem;
    font-size: 1.3rem;
    line-height: 2.3rem;
  }

}

@media screen and (max-width: 875px) {

  .aboutBlackBar {
    padding: 2rem 5rem;
  }

  .aboutEachParagraph {
    float: none;
    max-width: 75vw;
    margin: 3rem auto;
  }

  .aboutEachImage img {
    width: 75vw;
    float: none;
    display: block;
    margin: auto;
  }

  .aboutEachImage {
    float: none;
    margin: auto;
  }

  #aboutHero img {
    height: 23rem;
  }

  #aboutSecondHero img {
    height: 40rem;
  }

}

@media screen and (max-width: 600px) {

  #aboutHero img {
    height: 16rem;
  }

  #aboutIntro {
    padding: 1.5rem 3rem;
    font-size: 1.2rem;
    line-height: 2rem;
  }

  .aboutEachParagraph {
    font-size: 1.1rem;
    max-width: 85vw;
  }

  .aboutEachImage img {
    width: 85vw;
  }

  #aboutSecondHero img {
    height: 28rem;
  }

}

@media screen and (max-width: 500px) {

  .aboutBlackBar {
    padding: 2rem;
    font-size: 1.2rem;
  }

}

@media screen and (max-width: 400px) {

  #aboutIntro {
    padding: 1.5rem 2rem;
    font-size: 1.1rem;
    line-height: 1.7rem;
  }

  .aboutEachImage img {
    height: 16rem;
  }

  #aboutSecondHero img {
    height: 20rem;
  }

  #aboutHero img {
    height: 11rem;
  }

}

</style>