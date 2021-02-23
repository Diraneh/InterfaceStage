<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210216102622 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, codepostale VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, telephonne VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, lienportfolio VARCHAR(255) NOT NULL, liengithub VARCHAR(255) NOT NULL, lien_cv VARCHAR(255) NOT NULL, promotion VARCHAR(255) NOT NULL, competence_un VARCHAR(255) NOT NULL, competence_deux VARCHAR(255) NOT NULL, competence_trois VARCHAR(255) NOT NULL, competence_quatre VARCHAR(255) NOT NULL, competence_cinq VARCHAR(255) NOT NULL, competence_six VARCHAR(255) NOT NULL, avatar VARCHAR(255) NOT NULL, mobilite VARCHAR(255) NOT NULL, zonne_mobilite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE profil');
    }
}
