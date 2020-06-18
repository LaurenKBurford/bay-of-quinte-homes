<style>


#property-listings {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
  margin-bottom: 2rem;
  margin-top: 2rem;
}

.property-listing {
  width: 30%;
  box-sizing: border-box;
  margin: 1rem;
  border-right: 3px solid #968b6b;
}

.property-listing img {
    height: 14rem;
    object-fit: cover;
}

.property-listing a.title:link {
    color: #303030;
    text-decoration: none;
    font-weight: 700;
    font-size: 30px;
    line-height: 30px;
    display: inline-block;
    margin: .5rem .5rem .5rem 0;
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

div.excerpt {
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

#prev a:link {
    color: #968b6b;
    float: left;
    margin: 0 0 2rem 5rem;
    text-decoration: none;
    font-size: 2.5rem;
    font-weight: 400;
    font-family: 'Roboto Condensed', sans-serif;
    border-bottom: solid 3px transparent;
    -webkit-transition: color .3s ease-out, border-bottom-color .3s ease-out;
       -moz-transition: color .3s ease-out, border-bottom-color .3s ease-out;
        -ms-transition: color .3s ease-out, border-bottom-color .3s ease-out;
         -o-transition: color .3s ease-out, border-bottom-color .3s ease-out;
            transition: color .3s ease-out, border-bottom-color .3s ease-out;
}

#prev a:visited {
  color: #968b6b;
}

#prev a:hover {
  border-bottom: solid 3px #968b6b;
}

#next {
  height: 6rem;
}

#next a:link {
    color: #968b6b;
    float: right;
    margin: 0 5rem 2rem 0;
    text-decoration: none;
    font-size: 2.5rem;
    font-weight: 400;
    font-family: 'Roboto Condensed', sans-serif;
    border-bottom: solid 3px transparent;
    -webkit-transition: color .3s ease-out, border-bottom-color .3s ease-out;
       -moz-transition: color .3s ease-out, border-bottom-color .3s ease-out;
        -ms-transition: color .3s ease-out, border-bottom-color .3s ease-out;
         -o-transition: color .3s ease-out, border-bottom-color .3s ease-out;
            transition: color .3s ease-out, border-bottom-color .3s ease-out;
}

#next a:visited {
  color: #968b6b;
}

#next a:hover {
  border-bottom: solid 3px #968b6b;
}

@media screen and (min-width: 1340px) {

  #property-listings {
    max-width: 1340px;
    margin: auto;
    margin-top: 2rem;
  }

}

@media screen and (max-width: 975px) {

  .property-listing {
    width: 45%;
  }

}

@media screen and (max-width: 800px) {

  #prev a:link {
    margin-left: 2rem;
    font-size: 2rem;
  }

  #next a:link {
    margin-right: 2rem;
    font-size: 2rem;
  }

}

@media screen and (max-width: 655px) {

  .property-listing {
    width: 85%;
  }

}

@media screen and (max-width: 420px) {

  .property-listing {
    width: 95%;
  }

}

@media screen and (max-width: 400px) {

  #prev a:link {
    margin-left: 1rem;
    font-size: 1.75rem;
  }

  #next a:link {
    margin-right: 1rem;
    font-size: 1.75rem;
  }

}

</style>
