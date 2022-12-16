########################
# Create contacts table
########################
CREATE TABLE contacts
(
  id      int       NOT NULL AUTO_INCREMENT,
  name   char(50)  NOT NULL ,
  address char(100)  NULL ,
  city char(100)  NULL ,
  state char(100) NULL ,
  phone char(100) NULL ,
  email char(100) NULL ,
  dob char(100) NULL ,
  contacts char(100) NULL ,
  age char(100) NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;