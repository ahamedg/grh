<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200117003130 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE cloud_categorie_service ALTER actif DROP NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER supprimer DROP NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_ajout TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_edit TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_famille_compte ADD cloud_type_compte_id INT NOT NULL');
        $this->addSql('ALTER TABLE cloud_famille_compte ADD CONSTRAINT FK_CAC2547A254A5A9E FOREIGN KEY (cloud_type_compte_id) REFERENCES cloud_type_compte (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_CAC2547A254A5A9E ON cloud_famille_compte (cloud_type_compte_id)');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER actif DROP NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER supprimer DROP NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_ajout TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_edit TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_service ALTER actif DROP NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ALTER supprimer DROP NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_ajout TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_edit TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE test ALTER actif DROP NOT NULL');
        $this->addSql('ALTER TABLE test ALTER supprimer DROP NOT NULL');
        $this->addSql('ALTER TABLE test ALTER date_ajout TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE test ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE test ALTER date_edit TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE test ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE utilisateur ALTER actif DROP NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ALTER supprimer DROP NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ALTER date_ajout TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE utilisateur ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE utilisateur ALTER date_edit TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE utilisateur ALTER date_edit DROP DEFAULT');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER actif SET NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER supprimer SET NOT NULL');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_famille_compte DROP CONSTRAINT FK_CAC2547A254A5A9E');
        $this->addSql('DROP INDEX IDX_CAC2547A254A5A9E');
        $this->addSql('ALTER TABLE cloud_famille_compte DROP cloud_type_compte_id');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER actif SET NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER supprimer SET NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_service ALTER actif SET NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ALTER supprimer SET NOT NULL');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE test ALTER actif SET NOT NULL');
        $this->addSql('ALTER TABLE test ALTER supprimer SET NOT NULL');
        $this->addSql('ALTER TABLE test ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE test ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE test ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE test ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE utilisateur ALTER actif SET NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ALTER supprimer SET NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE utilisateur ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE utilisateur ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE utilisateur ALTER date_edit DROP DEFAULT');
    }
}
