ALTER TABLE ct_centre
DROP FOREIGN KEY FK_902E42D9764A0FC;

ALTER TABLE ct_centre
ADD CONSTRAINT FK_902E42D9764A0FC FOREIGN KEY (ct_province_id) REFERENCES ct_province (id) ON DELETE CASCADE;

ALTER TABLE ct_usage
CHANGE usg_validite usg_validite VARCHAR(255) DEFAULT NULL;

ALTER TABLE ct_usage_tarif
CHANGE id id INT AUTO_INCREMENT NOT NULL;
