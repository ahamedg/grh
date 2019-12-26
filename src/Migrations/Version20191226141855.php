<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191226141855 extends AbstractMigration
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
        $this->addSql('CREATE TABLE cloud_categorie_service (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_compte (id INT NOT NULL, code VARCHAR(10) NOT NULL, designation VARCHAR(50) NOT NULL, logo VARCHAR(30) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, email VARCHAR(40) NOT NULL, telephone1 VARCHAR(30) NOT NULL, telephone2 VARCHAR(30) DEFAULT NULL, profondeur INT NOT NULL, sigle VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_famille_compte (id INT NOT NULL, designation VARCHAR(50) NOT NULL, code_acces VARCHAR(20) NOT NULL, description VARCHAR(255) DEFAULT NULL, cle_acces VARCHAR(20) NOT NULL, sigle VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_type_compte (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cloud_type_service (id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
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
        $this->addSql('DROP TABLE cloud_categorie_service');
        $this->addSql('DROP TABLE cloud_compte');
        $this->addSql('DROP TABLE cloud_famille_compte');
        $this->addSql('DROP TABLE cloud_type_compte');
        $this->addSql('DROP TABLE cloud_type_service');
    }
}
