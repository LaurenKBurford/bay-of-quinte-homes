<style>

#homeHeroImage img {
  width: 100%;
  height: 33rem;
  object-fit: cover;
  margin-top: 3rem;
}

#homeContent {
  max-width: 85%;
  margin: 0 auto;
}

.property-listing img {
    height: 14rem;
    object-fit: cover;
}

.blackBar {
  position: relative;
  background-color: #252527;
  opacity: .9;
  height: 9.5rem;
  top: -11.5rem;
}

.barText {
  position: relative;
  font-family: 'Roboto Condensed', sans-serif;
  top: -23rem;
  margin-left: 11rem;
}

.barHeadingOne {
  color: white;
  font-size: 3.2rem;
  font-weight: 100;
  position: absolute;
  top: -1.25rem;
}

.barHeadingTwo {
  color: #beb18e;
  position: absolute;
  font-size: 3rem;
  font-weight: 400;
  top: 2rem;
}

a .barHeadingTwo:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 4px;
  bottom: 0;
  left: 0;
  background-color: #beb18e;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

a .barHeadingTwo:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

#intro {
  position: relative;
  top: -5.5rem;
  background-color: #beb18e;
  color: white;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 100;
  font-size: 1.5rem;
  line-height: 2.5rem;
  padding: 1.5rem 11rem;
}

#sellingImage img {
  width: 100%;
  height: 33rem;
  object-fit: cover;
}

#aboutIntro {
  background-color: #303030;
  border-top: solid 33px #beb18e;
  padding: 2rem 5rem;
  position: relative;
  top: -5rem;
}

#aboutIntro:after {
  content: "";
  clear: both;
  display: table;
}

#aboutIntro p {
  color: white;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 100;
  font-size: 1.5rem;
  line-height: 2rem;
  max-width: 35rem;
}

#century21 {
  height: 20rem;
  float: right;
  position: relative;
  top: -2.1rem;
  left: 3rem;
}

#learnMoreAbout {
  color: #beb18e;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 400;
  font-size: 2.75rem;
  display: inline-block;
  position: relative;
}

a #learnMoreAbout:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  bottom: 0;
  left: 0;
  background-color: #beb18e;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

a #learnMoreAbout:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

#countyImage img {
  width: 100%;
  height: 36rem;
  object-fit: cover;
  position: relative;
  top: -15rem;
  z-index: -1;
}

#whiteBar {
  background-color: white;
  opacity: .6;
  height: 16rem;
}

#countyText {
  position: relative;
  top: -12rem;
  width: 80%;
  margin-left: 5rem;
  font-family: 'Roboto Condensed', sans-serif;
}

#countyText p {
  position: absolute;
  font-size: 1.5rem;
  top: -1.5rem;
}

#countyText h4 {
  color: #303030;
  font-weight: 400;
  font-size: 2.75rem;
  display: inline-block;
  position: absolute;
  top: 2.5rem;
}

a #countyAbout:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  bottom: 0;
  left: 0;
  background-color: #a59471;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

a #countyAbout:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

#relative {
    position: absolute;
}

#contactInfo {
  margin: 2rem 5rem;
  position: relative;
  top: -15rem;
}
#century21Small {
  float: left;
  height: 5rem;
  margin-right: 3rem;
  position: relative;
  top: 1.25rem;
}
.contactInfo {
  display: inline-block;
  color: #a59471;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.3rem;
  margin-left: 4rem;
}
.blackText {
  color: black;
}

#properties-header {
  color: #303030;
  width: 26rem;
  margin: 0 auto 2rem auto;
  font-size: 3.5rem;
  font-weight: 400;
  font-family: 'Roboto Condensed', sans-serif;
}

#property-listings {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
  margin-bottom: 2rem;
}

.property-listing {
  width: 30%;
  box-sizing: border-box;
  margin: 1rem;
  border-right: 3px solid #968b6b;
}

.property-listing a.title:link {
    color: #303030;
    text-decoration: none;
    font-weight: 700;
    font-size: 30px;
    display: inline-block;
    margin: 0 .5rem .5rem 0;
    border-bottom: solid 3px transparent;
    -webkit-transition: color .3s ease-out, border-bottom-color .3s ease-out;
       -moz-transition: color .3s ease-out, border-bottom-color .3s ease-out;
        -ms-transition: color .3s ease-out, border-bottom-color .3s ease-out;
         -o-transition: color .3s ease-out, border-bottom-color .3s ease-out;
            transition: color .3s ease-out, border-bottom-color .3s ease-out;
}

.property-listing a.title:visited {
  color: #303030;
}

.property-listing a.title:hover {
  border-bottom: solid 3px #303030;
}

div.prop-excerpt {
    padding: .5rem 1rem .5rem 0;
}

.price {
  display: block;
  font-size: 23px;
  font-weight: 600;
}

.label {
  font-weight: 700;
}

.detail {
  display: inline-block;
  width: 6.5rem;
  color: #968b6b;
  font-size: 18px;
}

h3#properties-footer a:link {
    color: #968b6b;
    text-decoration: none;
    font-size: 3rem;
    font-weight: 400;
    font-family: 'Roboto Condensed', sans-serif;
    border-bottom: solid 3px transparent;
    -webkit-transition: color .3s ease-out, border-bottom-color .3s ease-out;
       -moz-transition: color .3s ease-out, border-bottom-color .3s ease-out;
        -ms-transition: color .3s ease-out, border-bottom-color .3s ease-out;
         -o-transition: color .3s ease-out, border-bottom-color .3s ease-out;
            transition: color .3s ease-out, border-bottom-color .3s ease-out;
}

h3#properties-footer a:visited {
  color: #968b6b;
}

h3#properties-footer a:hover {
  border-bottom: solid 3px #968b6b;
}

.contactInfo a:link {
    text-decoration: none;
    color: #a59471;
}

.contactInfo a:visited {
  color: #a59471;
}

.contactInfo a:hover {
  text-decoration: underline;
}

@media screen and (min-width: 1340px) {

  #homeHeroImage,
  .blackBar,
  .barText,
  #intro,
  #sellingImage,
  #aboutIntro,
  #whiteBar,
  #countyText,
  #countyImage,
  #contactInfo,
  #property-listings {
    max-width: 1340px;
    margin: auto;
  }

  .barText {
    padding: 1rem 5rem;
  }

  .blackBar {
    top: -12.5rem;
  }

  #countyText {
    padding: 1rem 5rem;
  }

  #contactInfo {
    margin-left: 25vw;
  }

}

@media screen and (max-width: 1140px) {

  .barText {
    margin-left: 6rem;
  }

  #intro {
    padding-left: 6rem;
  }

}

@media screen and (max-width: 1100px) {

  .contactInfo {
    margin-left: 2rem;
  }

  #contactInfo {
    margin: 2rem 3rem;
  }

  #contactInfo {
    height: 13rem;
  }

  #properties-header {
    width: 23rem;
    font-size: 3rem;
  }

}

@media screen and (max-width: 975px) {

  #century21Small img {
    height: 5rem;
    width: auto;
  }

  .contactInfo {
    font-size: 1.1rem;
  }

  .barText {
    margin-left: 4rem;
  }

  #intro {
    padding-left: 4rem;
  }

  #countyText {
    margin-left: 4rem;
  }

  #aboutIntro {
    padding: 2rem 4rem;
  }

  #century21 {
    height: 16rem;
  }

  .property-listing {
    width: 45%;
  }

  h3#properties-footer a:link {
    font-size: 2.5rem;
  }

}

@media screen and (max-width: 900px) {

  .barHeadingOne {
    font-size: 2.2rem;
    top: 0rem;
  }

  .barHeadingTwo {
    font-size: 2.5rem;
    top: 3rem;
  }

  #intro {
    font-size: 1.25rem;
    padding: 1.5rem 4rem;
  }

  #century21 {
    height: 12rem;
  }

  #countyText p {
    font-size: 1.25rem;
  }

  #countyText h4 {
    top: 1.5rem;
  }

  .contactInfo {
    clear: both;
    float: left;
  }

  #century21Small {
    top: 0;
    margin-bottom: 2rem;
  }

  #relative {
    position: relative;
    height: 16rem;
  }

  #contactInfo {
    position: absolute;
  }

}

@media screen and (max-width: 750px) {

  #aboutIntro p {
    clear: both;
  }

  #century21 {
    float: none;
    display: block;
    margin: 0 auto;
    left: 0px;
    height: 9rem;
  }

  #countyText p {
    font-size: 18px;
  }

  #countyText h4 {
    font-size: 1.5rem;
    line-height: 1.7rem;
    margin-top: 3rem;
  }

  .barHeadingTwo {
    font-size: 2rem;
  }

  #intro {
    line-height: 2rem;
  }

  #properties-header {
    width: 19rem;
    font-size: 2.5rem;
  }

  #countyImage img {
    height: 25rem;
  }

}

@media screen and (max-width: 655px) {

  .property-listing {
    width: 85%;
  }

}

@media screen and (max-width: 600px) {

  .barText {
    margin-left: 2rem;
  }

  #intro {
    top: -8.5rem;
    padding: 1.5rem 2rem;
  }

  #aboutIntro {
    padding: 2rem 2rem;
  }

  #countyText {
    margin-left: 2rem;
  }

  #countyText h4 {
    top: 3.5rem;
  }

  h3#properties-footer a:link {
    font-size: 2rem;
  }

  #aboutIntro p {
    font-size: 1.25rem;
  }

  #learnMoreAbout {
    font-size: 2.25rem;
  }

}

@media screen and (max-width: 500px) {

  .barHeadingOne {
    font-size: 1.85rem;
    top: .5rem;
  }

  .barHeadingTwo {
    font-size: 1.75rem;
    top: 4rem;
  }

  #properties-header {
    width: 15rem;
    font-size: 2rem;
  }

}

@media screen and (max-width: 440px) {

  .contactInfo {
    margin-left: 0rem;
  }

  #century21Small img {
    height: auto;
    width: 100%;
  }

  #whiteBar {
    opacity: .8;
  }

  .barHeadingTwo {
    font-size: 1.6rem;
    line-height: 1.8rem;
  }

}

@media screen and (max-width: 420px) {

  .property-listing {
    width: 95%;
  }

  h3#properties-footer a:link {
    font-size: 1.75rem;
  }

  #aboutIntro p {
    line-height: 1.75rem;
  }

  h3#properties-footer a:link {
    font-size: 1.75rem;
  }

  #aboutIntro p {
    font-size: 1.2rem;
  }

}

@media screen and (max-width: 415px) {

  .barHeadingOne {
    font-size: 1.5rem;
    font-weight: 400;
    top: 1.5rem;
  }

  #intro {
    top: -7.5rem;
    line-height: 1.7rem;
    font-size: 1.2rem;
  }

  #whiteBar {
    height: 15rem;
  }

  #countyText p {
    top: -2.5rem;
  }

  #countyText h4 {
    top: 3.5rem;
  }

  #countyImage img {
    top: -17rem;
  }

}

@media screen and (max-width: 410px) {

  #homeHeroImage img,
  #sellingImage img {
    height: 26rem;
  }

  #countyImage img {
      height: 24rem;
  }

}

@media screen and (max-width: 350px) {

  #contactInfo {
    margin: 2rem 1rem;
  }

  #century21Small {
    margin-right: 0;
  }

  #countyText {
    margin-left: 1rem;
  }

  #countyText h4 {
    top: 3.5rem;
  }

  .barText {
    margin-left: 1rem;
    margin-right: 1rem;
  }

  #aboutIntro {
    padding: 2rem 1rem;
  }

  #countyText p {
    top: -2.5rem;
  }

  #countyText h4 {
    top: 4.5rem;
  }

  #learnMoreAbout {
    font-size: 2rem;
  }

}



</style>
