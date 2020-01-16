<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200116115420 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE cloud_categorie_service_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_compte_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_famille_compte_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_type_compte_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cloud_type_service_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE test_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE utilisateur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cloud_categorie_service (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN DEFAULT NULL, supprimer BOOLEAN DEFAULT NULL, date_ajout VARCHAR(255) DEFAULT NULL, date_edit VARCHAR(255) DEFAULT NULL, id_user_auteur INT DEFAULT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_compte (id INT NOT NULL, code_cloud_compte VARCHAR(10) NOT NULL, designation_cloud_compte VARCHAR(30) NOT NULL, logo_cloud_compte VARCHAR(30) DEFAULT NULL, adresse_cloud_compte VARCHAR(255) DEFAULT NULL, email_cloud_compte VARCHAR(40) NOT NULL, telephone1_cloud_compte VARCHAR(30) NOT NULL, telephone2_cloud_compte VARCHAR(30) DEFAULT NULL, profondeur_cloud_compte INT NOT NULL, sigle_cloud_compte VARCHAR(15) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_famille_compte (id INT NOT NULL, designation_cloud_famille_compte VARCHAR(30) NOT NULL, description_cloud_famille_compte VARCHAR(255) DEFAULT NULL, code_acces_cloud_famille_compte VARCHAR(50) NOT NULL, cle_acces_cloud_famille_compte VARCHAR(50) NOT NULL, sigle_cloud_famille_compte VARCHAR(15) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_type_compte (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN DEFAULT NULL, supprimer BOOLEAN DEFAULT NULL, date_ajout VARCHAR(255) DEFAULT NULL, date_edit VARCHAR(255) DEFAULT NULL, id_user_auteur INT DEFAULT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_type_service (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN DEFAULT NULL, supprimer BOOLEAN DEFAULT NULL, date_ajout VARCHAR(255) DEFAULT NULL, date_edit VARCHAR(255) DEFAULT NULL, id_user_auteur INT DEFAULT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE test (id INT NOT NULL, code VARCHAR(255) NOT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN DEFAULT NULL, supprimer BOOLEAN DEFAULT NULL, date_ajout VARCHAR(255) DEFAULT NULL, date_edit VARCHAR(255) DEFAULT NULL, id_user_auteur INT DEFAULT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE utilisateur (id INT NOT NULL, code VARCHAR(10) NOT NULL, username VARCHAR(30) NOT NULL, password VARCHAR(255) NOT NULL, lost_password_url VARCHAR(255) NOT NULL, date_lost_password TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, change_password VARCHAR(255) DEFAULT NULL, email_compte VARCHAR(255) NOT NULL, nom_photo_profil VARCHAR(255) DEFAULT NULL, id_compte INT DEFAULT NULL, actif BOOLEAN DEFAULT NULL, supprimer BOOLEAN DEFAULT NULL, date_ajout VARCHAR(255) DEFAULT NULL, date_edit VARCHAR(255) DEFAULT NULL, id_user_auteur INT DEFAULT NULL, id_user_edit INT DEFAULT NULL, version INT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cloud_categorie_service_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_compte_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_famille_compte_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_type_compte_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cloud_type_service_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE test_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE utilisateur_id_seq CASCADE');
        $this->addSql('DROP TABLE cloud_categorie_service');
        $this->addSql('DROP TABLE cloud_compte');
        $this->addSql('DROP TABLE cloud_famille_compte');
        $this->addSql('DROP TABLE cloud_type_compte');
        $this->addSql('DROP TABLE cloud_type_service');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE utilisateur');
    }
}
