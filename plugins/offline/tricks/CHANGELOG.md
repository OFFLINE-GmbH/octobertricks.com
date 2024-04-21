Tricks / Changelog
==================

## Version 1.1.0
- Add: New `onUploadImage` handler for the TrickForm component.
- Add: New `content_images` relationship on the Trick model.
- Add: Laravel IDE helper to support accurate auto-completion.
- Update: Refactor model structure and relationships.
- Fix: Exclude tags without published tricks on TagList component.
- Fix: Wrong `tricks` hasMany relationship (needs to be a `hasManyThrough` one).

## Version 1.0.1
- Initial Release
