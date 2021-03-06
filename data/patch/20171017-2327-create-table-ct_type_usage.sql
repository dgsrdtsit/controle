CREATE TABLE ct_type_usage (
id INT AUTO_INCREMENT NOT NULL,
tpu_libelle VARCHAR(10) NOT NULL,
PRIMARY KEY(id))
DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;

ALTER TABLE ct_usage
ADD ct_type_usage_id INT DEFAULT NULL;

ALTER TABLE ct_usage
ADD CONSTRAINT FK_C8709F46E2563560 FOREIGN KEY (ct_type_usage_id) REFERENCES ct_type_usage (id);

CREATE INDEX IDX_C8709F46E2563560 ON ct_usage (ct_type_usage_id);
