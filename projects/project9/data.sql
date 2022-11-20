########################
# Create customers table
########################
CREATE TABLE displayNotes
(
  id      int       NOT NULL AUTO_INCREMENT,
  date_time    char(50)  NOT NULL ,
  note_content char(100)  NULL ,
  PRIMARY KEY (id)
) ENGINE=InnoDB;