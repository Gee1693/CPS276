########################
# Create admins table
########################
CREATE TABLE admins
(
  id      int       NOT NULL AUTO_INCREMENT,
  name   char(50)  NOT NULL ,
  email char(100) NULL ,
  password char(100) NULL ,
  status char(100) NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;