# The User Interface and Layout Ontology (UILO)

[UILO Schema](http://uilo.org/schema/uilo.owl)

Author: Daniel Schlager "email at danielschlager.at"

Copyright 2019 Daniel Schlager

- First draft: 2019-05-08
- Published: 2019-08-15
- Updated: 2019-11-02
- Version 0.2 (work in progress)

---

## Abstract

UILO (an acronym of user interface and layout ontology) is a machine-readable ontology describing user interface layouts, components, and elements.

## UILO at a glance

UILO is a descriptive vocabulary expressed using the Resource Description Framework (RDF) and the Web Ontology Language (OWL).

With UILO, it is possible to describe a user interface (primarily Web), to evaluate it automatically and to generate a suitable representation based on any framework (for example, Angular with Bootstrap or React and Bulma or just vanilla HTML/CSS).

## The Basic Idea

The idea for this ontology was born during my work on a Visual Builder for Angular 8. The Visual Builder allows to arrange and individualize existing angular components in a layout (grid). The output is a JSON. However, in a current project, I need representation as RDF. So the work on this ontology started.

Components described with this ontology. A component can consist of several elements.
Elements can have different properties.
Applicable properties also described in the ontology.
