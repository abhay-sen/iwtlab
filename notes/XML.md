### XML
	stands for extensible markup language
	designed to store and transport data
	human and macine readable
### XML document
	<?xml version="1.0"?>
	<contact-info>
	<name>Akash</name>
	<company>Google</company>
	<phone>0111234</phone>
	</contact-info>
	two kinds of information in the above example
		markup like <contact-info>
		text or character data like google and 0111234
	must contain one root element that is the parent if all other elements like in our example contact info was
	xml simplifies things like data sharing transport platform changes and data availability
	many systems contain data in incompatible formats. exchanging data between incompatible systems is a time consuming task for web developers large amounts of data must be converted and incompatible data is often lost
	xml stores data in plain text format this provides software and hardware independent way of sorting transporting and sharing data
	makes it easier to expand or upgrade to new operating system, new applications or new browsers without losing data
	data can be available to all kinds of reading machines like people computers voice machines news feeds 
### Entity References
	when using special characters like > or < in a xml element you have to use notation like &lt;
### XML Elements
	an xml element is everything from the element's start tag to element's end tag including both
	an element can contain 
		text
		attributes
		other elements 
		or a mix of the above
### XML Attributes
	attribute value must be quoted either single or double quote marks can be used
	attributes cannot contain multiple values 
	cannot contain tree structures
	are not easily expandable
### CDATA Sections
CDATA - character data defined as blocks of text that are not parsed by the parser but otherwise recognized as markup
**Syntax** <![CDATA[
         character with markup
        ]]>
    predefined entities such as &lt; &gt; and &amp; require typing and are generally difficult to read in the markup 
    In such cases CDATA sections can be used By using CDATA section you are commanding the parser that the particular section of the document is no markup and should be treated as regular text.
### XML -Validation
	validation is a process by which an XML document is validated
	An XML document is said to be valid if the contents match with the elements, attributes and associated document type declaration(DTD)
		Well-formed XML document
		Valid XML document
**XML DTD** purpose of a document type declaration(DTD) is to define the structure and the legal elements and attributes of an XML document
 `<!DOCTYPE note`
`[<!ELEMENT note (to, from, heading, body)>`
`<!ELEMENT to (#PCDATA)>`
`<!ELEMENT from (#PCDATA)>`
`<!ELEMENT heading (#PCDATA)>`
`<!ELEMENT body (#PCDATA)>]>`
the interpretation of the above DTD
- !DOCTYPE note defines that the root element of the document is note
- !ELEMENT note Defines that the note element must contain the elements: "to, from, !heading, body"
- !ELEMENT to - defines that the to element to be of type "#PCDATA"
- !ELEMENT from - defines the from element to be of type "#PCDATA"
- !ELEMENT heading - defines the heading element to be of type "#PCDATA"
- !ELEMENT body - defines the body element to be of type "#PCDATA"
- where #PCDATA means parseable character data
An XML document is said to be well formed if it adheres to the foolowing rules