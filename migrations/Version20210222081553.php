<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210222081553 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE liste_candidatureenvoyer (id INT AUTO_INCREMENT NOT NULL, entreprise_contact VARCHAR(255) NOT NULL, datedemande VARCHAR(255) NOT NULL, daterelance VARCHAR(255) NOT NULL, dateentretient VARCHAR(255) NOT NULL, statut1 VARCHAR(255) NOT NULL, statut2 VARCHAR(255) NOT NULL, statut3 VARCHAR(255) NOT NULL, statut4 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE liste_candidatureenvoyer');
    }
}
