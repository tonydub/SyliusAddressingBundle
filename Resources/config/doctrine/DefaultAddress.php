<?xml version="1.0" encoding="UTF-8"?>

<doctrine-mapping xmlns="http://doctrine-project.org/schemas/orm/doctrine-mapping"
                  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                  xmlns:gedmo="http://gediminasm.org/schemas/orm/doctrine-extensions-mapping"
                  xsi:schemaLocation="http://doctrine-project.org/schemas/orm/doctrine-mapping
                                      http://doctrine-project.org/schemas/orm/doctrine-mapping.xsd">

    <entity name="Sylius\Bundle\AddressingBundle\Entity\DefaultAddress" table="sylius_addressing_address">
        <id name="id" column="id" type="integer">
            <generator strategy="AUTO" />
        </id>
    </entity>

</doctrine-mapping>
