<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200110215030 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cloud_categorie_service (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cloud_compte (id INT AUTO_INCREMENT NOT NULL, code_cloud_compte VARCHAR(10) NOT NULL, designation_cloud_compte VARCHAR(30) NOT NULL, logo_cloud_compte VARCHAR(30) DEFAULT NULL, adresse_cloud_compte VARCHAR(255) DEFAULT NULL, email_cloud_compte VARCHAR(40) NOT NULL, telephone1_cloud_compte VARCHAR(30) NOT NULL, telephone2_cloud_compte VARCHAR(30) DEFAULT NULL, profondeur_cloud_compte INT NOT NULL, sigle_cloud_compte VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cloud_famille_compte (id INT AUTO_INCREMENT NOT NULL, designation_cloud_famille_compte VARCHAR(30) NOT NULL, description_cloud_famille_compte VARCHAR(255) DEFAULT NULL, code_acces_cloud_famille_compte VARCHAR(50) NOT NULL, cle_acces_cloud_famille_compte VARCHAR(50) NOT NULL, sigle_cloud_famille_compte VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cloud_type_compte (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cloud_type_service (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE cloud_categorie_service');
        $this->addSql('DROP TABLE cloud_compte');
        $this->addSql('DROP TABLE cloud_famille_compte');
        $this->addSql('DROP TABLE cloud_type_compte');
        $this->addSql('DROP TABLE cloud_type_service');
    }
}
