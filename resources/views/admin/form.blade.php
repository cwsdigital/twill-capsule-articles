@extends('twill::layouts.form', [
    'additionalFieldsets' => [
        ['fieldset' => 'metadata', 'label' => 'Website SEO'],
    ]
])


@section('contentFields')

    @include('Base.resources.views.admin.fields.heading')

    @formField('input', [
        'name' => 'subheading',
        'label' => 'Subheading',
        'translated' => true,
    ])

    <h2>Listing Details</h2>

    @formField('medias', [
        'name' => 'role-all',
        'label' => 'Listing Image'
    ])

    @formField('wysiwyg', [
        'name' => 'excerpt',
        'label' => 'Excerpt',
        'translated' => true,
    ])

    @formField('block_editor')


    {{--
        <hr />

        <h2>Settings</h2>

        @formField('select', [
            'label' => 'Author',
            'max' => 1,
            'name' => 'author_id',
            'options' => $authors
        ])

        @formField('browser', [
            'label' => 'Categories',
            'max' => 5,
            'name' => 'categories',
            'modules' => [
                [
                    'name' => 'categories',
                    'routePrefix' => '',
                ],
            ]
        ])
    --}}
    @stop

    @section('fieldsets')
        @metadataFields
    @stop
