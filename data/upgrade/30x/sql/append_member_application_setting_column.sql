ALTER TABLE member_application_setting ADD `type` varchar(255) NOT NULL DEFAULT 'application';
ALTER TABLE member_application_setting ADD `hash` varchar(32) NOT NULL;
ALTER TABLE member_application_setting MODIFY value text;
