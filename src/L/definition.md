# L — Liskov Substitution Principle

> "Subtypes must be substitutable for their base types."

## Definition
Any child class should be able to **replace its parent class** without breaking the program.  
The child must honor the contract defined by the parent.

## Key Idea
- Subclass behavior must match parent expectations
- Don't override methods in a way that breaks the parent's contract

## Violation Sign
A subclass that **throws an exception** or does nothing for a method the parent defines.