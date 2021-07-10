ALTER TABLE ct_user
ADD ct_centre_id INT DEFAULT NULL,
ADD ct_role_id INT DEFAULT NULL;

ALTER TABLE ct_user
ADD CONSTRAINT FK_A115979E82C8474E FOREIGN KEY (ct_centre_id) REFERENCES ct_centre (id);

ALTER TABLE ct_user
ADD CONSTRAINT FK_A115979EB37C5964 FOREIGN KEY (ct_role_id) REFERENCES ct_role (id);

CREATE INDEX IDX_A115979E82C8474E ON ct_user (ct_centre_id);
CREATE INDEX IDX_A115979EB37C5964 ON ct_user (ct_role_id);