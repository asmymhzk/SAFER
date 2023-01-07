<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221231201146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE terrain_agricole (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE safer');
        $this->addSql('ALTER TABLE properties ADD surface VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE safer (Référence VARCHAR(15) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, Intitulé VARCHAR(200) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, Descriptif VARCHAR(200) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, Localisation VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, Surface VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, Prix VARCHAR(15) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, Type VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, Catégorie VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(Référence)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE terrain_agricole');
        $this->addSql('ALTER TABLE properties DROP surface');
    }
}
