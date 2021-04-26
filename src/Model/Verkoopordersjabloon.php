<?php
/**
 * @author  IntoWebDevelopment <info@intowebdevelopment.nl>
 * @project SnelstartApiPHP
 */

namespace SnelstartPHP\Model;

final class Verkoopordersjabloon extends SnelstartObject
{
    /**
     * De omschrijving van het sjabloon.
     *
     * @var string|null
     */
    private $omschrijving;

    /**
     * Een vlag dat aangeeft of een sjabloon niet meer actief is binnen de administratie.\r\nIndien <see langword=\"true\" />, dan kan het sjabloon als \"verwijderd\" worden beschouwd.
     *
     * @var bool|null
     */
    private $nonactief;

    /**
     * @var bool|null
     *
     * Exclusief btw: In dat geval worden de verkoopprijzen in het verkoopscherm van SnelStart 12 en op de factuur exclusief btw weergegeven;
     * Inclusief btw: In dat geval worden de verkoopprijzen in het verkoopscherm van SnelStart 12 en op de factuur inclusief btw weergegeven
     */
    private $prijsIngaveExclusiefBtw;

    /**
     * @var bool|null
     *
     * Een vlag dat aangeeft of nieuwe orders automatisch geblokkeerd worden.
     */
    private $nieuweOrdersBlokkeren;

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getNonactief(): ?bool
    {
        return $this->nonactief;
    }

    public function setNonactief(bool $nonactief): self
    {
        $this->nonactief = $nonactief;

        return $this;
    }

    public function getPrijsIngaveExclusiefBtw(): ?bool
    {
        return $this->prijsIngaveExclusiefBtw;
    }

    public function setPrijsIngaveExclusiefBtw(bool $prijsIngaveExclusiefBtw): self
    {
        $this->prijsIngaveExclusiefBtw = $prijsIngaveExclusiefBtw;

        return $this;
    }

    public function getNieuweOrdersBlokkeren(): ?bool
    {
        return $this->nieuweOrdersBlokkeren;
    }

    public function setNieuweOrdersBlokkeren(bool $nieuweOrdersBlokkeren): self
    {
        $this->nieuweOrdersBlokkeren = $nieuweOrdersBlokkeren;

        return $this;
    }
}