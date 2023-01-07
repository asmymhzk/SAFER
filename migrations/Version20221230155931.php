<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221230155931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin_safer (id INT AUTO_INCREMENT NOT NULL, id_admin INT NOT NULL, nom_admin VARCHAR(255) NOT NULL, prenom_admin VARCHAR(255) NOT NULL, mail_admin VARCHAR(255) NOT NULL, mot_de_passe VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ajouter_favoris (id INT AUTO_INCREMENT NOT NULL, date_ajout DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, id_cat INT NOT NULL, type_cat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande_contact (id INT AUTO_INCREMENT NOT NULL, mail_dc VARCHAR(255) NOT NULL, prix_min INT DEFAULT NULL, prix_max INT NOT NULL, ville_dc VARCHAR(255) NOT NULL, code_postal_dc INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE porteur_projet (id INT AUTO_INCREMENT NOT NULL, id_pp INT NOT NULL, mail_pp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE properties CHANGE status status VARCHAR(255) NOT NULL, CHANGE categorie categorie VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE admin_safer');
        $this->addSql('DROP TABLE ajouter_favoris');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE demande_contact');
        $this->addSql('DROP TABLE porteur_projet');
        $this->addSql('ALTER TABLE properties CHANGE status status INT NOT NULL, CHANGE categorie categorie INT NOT NULL');
    }
}
