# The User Interface and Layout Ontology (UILO)

[UILO Scheme](https://danielschlager.at/uilo/schema
)


Author: Daniel Schlager "email at danielschlager.at"

Copyright 2019 Daniel Schlager

* First draft: 2019-05-08
* Published: 2019-08-15
* Version 0.1 (work in progress)

***

# Abstract
UILO (an acronym of user interface and layout ontology) is a machine-readable ontology describing user interface elements and layouts.

# UILO at a glance
UILO is a descriptive vocabulary expressed using the Resource Description Framework (RDF) and the Web Ontology Language (OWL). 

With UILO it is possible to describe a user interface (primarily Web), to evaluate it automatically and to generate a suitable representation based on any framework (for example Angular with Bootstrap or React and Bulma or just vanilla html/css).

# The Basic Idea
The idea for this ontology was born during my work on a Visual Builder for Angular 8. The Visual Builder allows to arrange and individualize existing angular components in a layout (grid). The output is a JSON. However, in a current project, I need representation as RDF. So the work on this ontology started.

Components can be described with this ontology. A component can consist of several elements. 

## Example of a component: 

### Menu
The elements of this component are Menu and Menu Items.

Another example is an elementary component consisting of 2 elements:
Heading and paragraph

