ALTER TABLE ct_reception ADD ct_genre_id INT DEFAULT NULL;
ALTER TABLE ct_reception ADD CONSTRAINT FK_942215A2D74CE6E6 FOREIGN KEY (ct_genre_id) REFERENCES ct_genre (id);
CREATE INDEX IDX_942215A2D74CE6E6 ON ct_reception (ct_genre_id);
