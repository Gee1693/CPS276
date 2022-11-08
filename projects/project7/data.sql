########################
# Create customers table
########################
CREATE TABLE project7
(
  id      int       NOT NULL AUTO_INCREMENT,
  file_name    char(50)  NOT NULL ,
  file_path char(100)  NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;