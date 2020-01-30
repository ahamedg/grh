<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200130122711 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE cloud_type_service ALTER date_ajout TYPE DATE');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_edit TYPE DATE');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_ajout TYPE DATE');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_edit TYPE DATE');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_compte ALTER date_ajout TYPE DATE');
        $this->addSql('ALTER TABLE cloud_compte ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_compte ALTER date_edit TYPE DATE');
        $this->addSql('ALTER TABLE cloud_compte ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_famille_compte ALTER date_ajout TYPE DATE');
        $this->addSql('ALTER TABLE cloud_famille_compte ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_famille_compte ALTER date_edit TYPE DATE');
        $this->addSql('ALTER TABLE cloud_famille_compte ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_ajout TYPE DATE');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_edit TYPE DATE');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE utilisateur ALTER date_ajout TYPE DATE');
        $this->addSql('ALTER TABLE utilisateur ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE utilisateur ALTER date_edit TYPE DATE');
        $this->addSql('ALTER TABLE utilisateur ALTER date_edit DROP DEFAULT');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_type_service ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_categorie_service ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE utilisateur ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE utilisateur ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE utilisateur ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE utilisateur ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_compte ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_compte ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_compte ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_compte ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_type_compte ALTER date_edit DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_famille_compte ALTER date_ajout TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_famille_compte ALTER date_ajout DROP DEFAULT');
        $this->addSql('ALTER TABLE cloud_famille_compte ALTER date_edit TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE cloud_famille_compte ALTER date_edit DROP DEFAULT');
    }
}
