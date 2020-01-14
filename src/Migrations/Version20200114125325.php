<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200114125325 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE cloud_categorie_service ADD id_compte INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ADD actif BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ADD supprimer BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ADD date_ajout TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ADD date_edit TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ADD id_user_auteur INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ADD id_user_edit INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ADD version INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ADD id_compte INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ADD actif BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ADD supprimer BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ADD date_ajout TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ADD date_edit TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ADD id_user_auteur INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ADD id_user_edit INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ADD version INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ADD id_compte INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ADD actif BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ADD supprimer BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ADD date_ajout TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ADD date_edit TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ADD id_user_auteur INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ADD id_user_edit INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ADD version INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cloud_categorie_service DROP id_compte');
        $this->addSql('ALTER TABLE cloud_categorie_service DROP actif');
        $this->addSql('ALTER TABLE cloud_categorie_service DROP supprimer');
        $this->addSql('ALTER TABLE cloud_categorie_service DROP date_ajout');
        $this->addSql('ALTER TABLE cloud_categorie_service DROP date_edit');
        $this->addSql('ALTER TABLE cloud_categorie_service DROP id_user_auteur');
        $this->addSql('ALTER TABLE cloud_categorie_service DROP id_user_edit');
        $this->addSql('ALTER TABLE cloud_categorie_service DROP version');
        $this->addSql('ALTER TABLE cloud_type_compte DROP id_compte');
        $this->addSql('ALTER TABLE cloud_type_compte DROP actif');
        $this->addSql('ALTER TABLE cloud_type_compte DROP supprimer');
        $this->addSql('ALTER TABLE cloud_type_compte DROP date_ajout');
        $this->addSql('ALTER TABLE cloud_type_compte DROP date_edit');
        $this->addSql('ALTER TABLE cloud_type_compte DROP id_user_auteur');
        $this->addSql('ALTER TABLE cloud_type_compte DROP id_user_edit');
        $this->addSql('ALTER TABLE cloud_type_compte DROP version');
        $this->addSql('ALTER TABLE cloud_type_service DROP id_compte');
        $this->addSql('ALTER TABLE cloud_type_service DROP actif');
        $this->addSql('ALTER TABLE cloud_type_service DROP supprimer');
        $this->addSql('ALTER TABLE cloud_type_service DROP date_ajout');
        $this->addSql('ALTER TABLE cloud_type_service DROP date_edit');
        $this->addSql('ALTER TABLE cloud_type_service DROP id_user_auteur');
        $this->addSql('ALTER TABLE cloud_type_service DROP id_user_edit');
        $this->addSql('ALTER TABLE cloud_type_service DROP version');
    }
}
