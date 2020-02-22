<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200222082900 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE account_utilisateur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_categorie_service_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_compte_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_famille_compte_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_section_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_type_budget_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_type_compte_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_type_service_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE map_commune_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE map_pays_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE map_prefecture_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE map_states_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE map_ville_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE account_utilisateur (id INT NOT NULL, code VARCHAR(10) NOT NULL, username VARCHAR(30) NOT NULL, password VARCHAR(255) NOT NULL, lost_password_url VARCHAR(255) DEFAULT NULL, date_lost_password TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, change_password VARCHAR(255) DEFAULT NULL, email_compte VARCHAR(255) NOT NULL, nom_photo_profil VARCHAR(255) DEFAULT NULL, telephone1_utilisateur VARCHAR(255) NOT NULL, telephone2_utilisateur VARCHAR(255) DEFAULT NULL, adresse_utilisateur VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_categorie_service (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(150) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_compte (id INT NOT NULL, pays_id INT NOT NULL, states_id INT NOT NULL, ville_id INT NOT NULL, commune_id INT NOT NULL, prefecture_id INT NOT NULL, cloud_type_budget_id INT NOT NULL, cloud_section_id INT NOT NULL, cloud_categorie_service_id INT NOT NULL, cloud_type_service_id INT NOT NULL, cloud_famille_compte_id INT NOT NULL, cloud_compte_id INT DEFAULT NULL, code_cloud_compte VARCHAR(10) NOT NULL, designation_cloud_compte VARCHAR(150) NOT NULL, logo_cloud_compte VARCHAR(30) DEFAULT NULL, adresse_cloud_compte VARCHAR(255) DEFAULT NULL, email_cloud_compte VARCHAR(255) NOT NULL, telephone1_cloud_compte VARCHAR(255) NOT NULL, telephone2_cloud_compte VARCHAR(255) DEFAULT NULL, profondeur_cloud_compte INT NOT NULL, sigle_cloud_compte VARCHAR(15) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1B0761D3A6E44244 ON cloud_compte (pays_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D3B17973F ON cloud_compte (states_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D3A73F0036 ON cloud_compte (ville_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D3131A4F72 ON cloud_compte (commune_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D39D39C865 ON cloud_compte (prefecture_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D3E1249A06 ON cloud_compte (cloud_type_budget_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D37DD09FF6 ON cloud_compte (cloud_section_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D3FD4C5564 ON cloud_compte (cloud_categorie_service_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D3C152B851 ON cloud_compte (cloud_type_service_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D3949A13B0 ON cloud_compte (cloud_famille_compte_id)');
        $this->addSql('CREATE INDEX IDX_1B0761D3B0C8107 ON cloud_compte (cloud_compte_id)');
        $this->addSql('CREATE TABLE cloud_famille_compte (id INT NOT NULL, cloud_type_compte_id INT NOT NULL, pays_id INT NOT NULL, states_id INT NOT NULL, ville_id INT NOT NULL, designation_cloud_famille_compte VARCHAR(150) NOT NULL, description_cloud_famille_compte VARCHAR(255) DEFAULT NULL, code_acces_cloud_famille_compte VARCHAR(50) NOT NULL, cle_acces_cloud_famille_compte VARCHAR(50) NOT NULL, sigle_cloud_famille_compte VARCHAR(15) DEFAULT NULL, adresse_cloud_famille_compte VARCHAR(255) DEFAULT NULL, email_cloud_famille_compte VARCHAR(255) DEFAULT NULL, telephone_cloud_famille_compte VARCHAR(255) NOT NULL, code VARCHAR(10) NOT NULL, logo_cloud_famille_compte VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_CAC2547A254A5A9E ON cloud_famille_compte (cloud_type_compte_id)');
        $this->addSql('CREATE INDEX IDX_CAC2547AA6E44244 ON cloud_famille_compte (pays_id)');
        $this->addSql('CREATE INDEX IDX_CAC2547AB17973F ON cloud_famille_compte (states_id)');
        $this->addSql('CREATE INDEX IDX_CAC2547AA73F0036 ON cloud_famille_compte (ville_id)');
        $this->addSql('CREATE TABLE cloud_section (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(150) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_type_budget (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(150) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_type_compte (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(150) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_type_service (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(150) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE map_commune (id INT NOT NULL, prefecture_id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(150) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_CDC929B29D39C865 ON map_commune (prefecture_id)');
        $this->addSql('CREATE TABLE map_pays (id INT NOT NULL, nom_tri_pays VARCHAR(5) NOT NULL, nom_pays VARCHAR(255) NOT NULL, indicatif_pays VARCHAR(5) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE map_prefecture (id INT NOT NULL, states_id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(150) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN NOT NULL, supprimer BOOLEAN NOT NULL, date_ajout TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, date_edit TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, id_user_auteur INT NOT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BE991414B17973F ON map_prefecture (states_id)');
        $this->addSql('CREATE TABLE map_states (id INT NOT NULL, pays_id INT NOT NULL, nom_states VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_7546AC71A6E44244 ON map_states (pays_id)');
        $this->addSql('CREATE TABLE map_ville (id INT NOT NULL, states_id INT NOT NULL, commune_id INT DEFAULT NULL, nom_ville VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C33596AFB17973F ON map_ville (states_id)');
        $this->addSql('CREATE INDEX IDX_C33596AF131A4F72 ON map_ville (commune_id)');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3A6E44244 FOREIGN KEY (pays_id) REFERENCES map_pays (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3B17973F FOREIGN KEY (states_id) REFERENCES map_states (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3A73F0036 FOREIGN KEY (ville_id) REFERENCES map_ville (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3131A4F72 FOREIGN KEY (commune_id) REFERENCES map_commune (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D39D39C865 FOREIGN KEY (prefecture_id) REFERENCES map_prefecture (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3E1249A06 FOREIGN KEY (cloud_type_budget_id) REFERENCES cloud_type_budget (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D37DD09FF6 FOREIGN KEY (cloud_section_id) REFERENCES cloud_section (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3FD4C5564 FOREIGN KEY (cloud_categorie_service_id) REFERENCES cloud_categorie_service (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3C152B851 FOREIGN KEY (cloud_type_service_id) REFERENCES cloud_type_service (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3949A13B0 FOREIGN KEY (cloud_famille_compte_id) REFERENCES cloud_famille_compte (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_compte ADD CONSTRAINT FK_1B0761D3B0C8107 FOREIGN KEY (cloud_compte_id) REFERENCES cloud_compte (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_famille_compte ADD CONSTRAINT FK_CAC2547A254A5A9E FOREIGN KEY (cloud_type_compte_id) REFERENCES cloud_type_compte (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_famille_compte ADD CONSTRAINT FK_CAC2547AA6E44244 FOREIGN KEY (pays_id) REFERENCES map_pays (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_famille_compte ADD CONSTRAINT FK_CAC2547AB17973F FOREIGN KEY (states_id) REFERENCES map_states (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cloud_famille_compte ADD CONSTRAINT FK_CAC2547AA73F0036 FOREIGN KEY (ville_id) REFERENCES map_ville (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE map_commune ADD CONSTRAINT FK_CDC929B29D39C865 FOREIGN KEY (prefecture_id) REFERENCES map_prefecture (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE map_prefecture ADD CONSTRAINT FK_BE991414B17973F FOREIGN KEY (states_id) REFERENCES map_states (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE map_states ADD CONSTRAINT FK_7546AC71A6E44244 FOREIGN KEY (pays_id) REFERENCES map_pays (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE map_ville ADD CONSTRAINT FK_C33596AFB17973F FOREIGN KEY (states_id) REFERENCES map_states (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE map_ville ADD CONSTRAINT FK_C33596AF131A4F72 FOREIGN KEY (commune_id) REFERENCES map_commune (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3FD4C5564');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3B0C8107');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3949A13B0');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D37DD09FF6');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3E1249A06');
        $this->addSql('ALTER TABLE cloud_famille_compte DROP CONSTRAINT FK_CAC2547A254A5A9E');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3C152B851');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3131A4F72');
        $this->addSql('ALTER TABLE map_ville DROP CONSTRAINT FK_C33596AF131A4F72');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3A6E44244');
        $this->addSql('ALTER TABLE cloud_famille_compte DROP CONSTRAINT FK_CAC2547AA6E44244');
        $this->addSql('ALTER TABLE map_states DROP CONSTRAINT FK_7546AC71A6E44244');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D39D39C865');
        $this->addSql('ALTER TABLE map_commune DROP CONSTRAINT FK_CDC929B29D39C865');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3B17973F');
        $this->addSql('ALTER TABLE cloud_famille_compte DROP CONSTRAINT FK_CAC2547AB17973F');
        $this->addSql('ALTER TABLE map_prefecture DROP CONSTRAINT FK_BE991414B17973F');
        $this->addSql('ALTER TABLE map_ville DROP CONSTRAINT FK_C33596AFB17973F');
        $this->addSql('ALTER TABLE cloud_compte DROP CONSTRAINT FK_1B0761D3A73F0036');
        $this->addSql('ALTER TABLE cloud_famille_compte DROP CONSTRAINT FK_CAC2547AA73F0036');
        $this->addSql('DROP SEQUENCE account_utilisateur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_categorie_service_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_compte_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_famille_compte_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_section_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_type_budget_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_type_compte_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_type_service_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE map_commune_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE map_pays_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE map_prefecture_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE map_states_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE map_ville_id_seq CASCADE');
        $this->addSql('DROP TABLE account_utilisateur');
        $this->addSql('DROP TABLE cloud_categorie_service');
        $this->addSql('DROP TABLE cloud_compte');
        $this->addSql('DROP TABLE cloud_famille_compte');
        $this->addSql('DROP TABLE cloud_section');
        $this->addSql('DROP TABLE cloud_type_budget');
        $this->addSql('DROP TABLE cloud_type_compte');
        $this->addSql('DROP TABLE cloud_type_service');
        $this->addSql('DROP TABLE map_commune');
        $this->addSql('DROP TABLE map_pays');
        $this->addSql('DROP TABLE map_prefecture');
        $this->addSql('DROP TABLE map_states');
        $this->addSql('DROP TABLE map_ville');
    }
}
