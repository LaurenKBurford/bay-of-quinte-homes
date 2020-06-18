<style>

#contactHero img {
  width: 100%;
  height: 34rem;
  object-fit: cover;
  margin-top: 3rem;
}

#contactContact {
  width: 53rem;
  margin: auto;
}

.contactPersonalInfo {
  margin: 3rem 5rem;
  float: left;
  color: #beb18e;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.5rem;
  font-weight: 100;
}

.contactPersonalInfo p {
    margin: .6rem;
}

.contactPersonalInfo a:link {
  color: #beb18e;
  text-decoration: none;
}

.contactPersonalInfo a:hover {
  text-decoration: underline;
}

.contactPersonalInfo a:visited {
  color: #beb18e;
}

.blackText {
  color: black;
}

#contactText {
  clear: both;
  width: 41rem;
  margin: auto;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 1.2rem;
  line-height: 2rem;
}

#contactForm {
  background-color: #beb18e;
  padding-top: 3rem;
  padding-bottom: 3rem;
  margin-bottom: 6rem;
  margin-top: 6rem;
}

#contactForm input {
  display: block;
  margin: 2rem auto;
  background-color: #303030;
  color: white;
  width: 30rem;
  border: none;
  height: 2rem;
  padding: .2rem 1rem .2rem 1rem;
  font-size: 1.2rem;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 100;
  border-radius: 0;
}

#contactForm textarea {
  background-color: #303030;
  color: white;
  padding: 2rem 15rem;
  font-size: 1.2rem;
  height: 18rem;
  margin-top: 2.5rem;
  border: none;
  border-radius: 0;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: white;
  opacity: 1; /* Firefox */
  font-size: 1.2rem;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 100;
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: white;
  font-size: 1.2rem;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 100;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: white;
  font-size: 1.2rem;
  font-family: 'Roboto Condensed', sans-serif;
  font-weight: 100;
}

#contactForm input[type="submit"] {
  border-radius: 0;
  font-family: 'Nunito Sans', sans-serif;
  font-weight: 600;
  background-color: #303030;
  color: #beb18e;
  display: block;
  margin: 2rem auto 0 auto;
  width: 20rem;
  height: 3.5rem;
  border: 2px solid white;
  font-size: 1.6rem;
  text-transform: uppercase;
}

#contactForm input[type="submit"]:hover {
  background-color: #610B0B;
  cursor: pointer;
}

@media screen and (min-width: 1340px) {

  #contactHero,
  #contactContact,
  #contactForm {
    max-width: 1340px;
    margin: auto
  }

  #contactForm {
    margin-top: 3rem;
    margin-bottom: 3rem;
  }

  #contactText {
    width: 45vw;
  }

}

@media screen and (max-width: 1000px) {

  #contactForm textarea {
    padding: 2rem 6rem;
  }

}

@media screen and (max-width: 850px) {

  #contactHero img {
    height: 25rem;
  }

  #contactText {
    width: 66vw;
  }

  .contactPersonalInfo {
    margin: 3rem 2rem;
  }

  #contactContact {
    width: 80vw;
  }

}

@media screen and (max-width: 815px) {

  #contactContact {
    width: 90vw;
  }

  #contactHero img {
    height: 23rem;
  }

}

@media screen and (max-width: 735px) {

  .contactPersonalInfo {
    font-size: 1.25rem;
    margin: 2rem 2rem;
  }

  #contactForm textarea {
    padding: 2rem 3rem;
    font-size: 1.1rem;
  }

  #contactText {
    width: 80vw;
  }

}

@media screen and (max-width: 500px) {

  #contactText {
    font-size: 1.1rem;
    line-height: 1.75rem;
  }

  #contactForm input {
    width: 100vw;
  }

  #contactForm textarea {
    padding: 1rem 1rem;
  }

  #contactHero img {
    height: 16rem;
  }

}

@media screen and (max-width: 400px) {

  #contactForm input[type="submit"] {
    width: 65vw;
  }

  #contactForm textarea {
    height: 15rem;
  }

  #contactHero img {
    height: 13rem;
  }

  .contactPersonalInfo {
    margin: 1rem 1rem;
  }

}

</style>
